<?php
namespace Ign\Nic;
use Exception;

/**
 * Class to calculate pattern of letters and numbers required to provide a
 * specified number of plates.
 */
class Plates
{
    const letters = 26;
    const numbers = 10;

    protected $population;
    protected $upperBound;
    protected $patterns = array();

    public function __construct($population)
    {
        if (!is_numeric($population) || $population != (int) $population) {
            throw new Exception('Must be an integer population!');
        }

        $this->population = (int) $population;
    }

    public function getPattern()
    {
        $this->setUpperBound()->setPatterns()->sortPatterns();
        return $this->patterns[0];
    }

    /**
     * Get the upper bound
     *
     * The maximum elements required (e.g. assuming using only numbers)
     *
     * @return Plates
     */
    protected function setUpperBound()
    {
        // special handling for population = 1
        if ($this->population === 1) {
            $this->upperBound = 1;
        }
        else {
            $this->upperBound = (int) ceil(
                (log($this->population) / log(self::numbers)));
        }

        return $this;
    }

    /**
     * Identify the simplest (smallest) patterns which produce enough plates
     *
     * @return Plates
     */
    protected function setPatterns()
    {
        // compare solutions for different combinations of letters and numbers
        // x represents numbers required, while y is letters required
        // upper bound is used to avoid unecessary loops
        for ($x = 0; $x <= $this->upperBound; $x += 1) {
            for ($y = 0; $x + $y <= $this->upperBound; $y += 1) {
                if ($x === 0 && $y === 0) {
                    $plates = 0;
                }
                else {
                    $plates = pow(10, $x) * pow(26, $y);
                }
                if ($plates >= $this->population ) {
                    // reset upperBound save iterating over entire set
                    $this->upperBound = $x + $y;
                    // store solution
                    $this->patterns[] = array(
                        'numbers' => $x,
                        'letters' => $y,
                        'plates'  => $plates,
                        'diff'    => $plates - $this->population,
                    );
                    // don't bother to evaluate more y's for this x
                    break;
                }
            }
        }

        return $this;
    }

    /**
     * Sort the patterns into order of best fit (asc)
     *
     * @return Plates
     */
    protected function sortPatterns()
    {
        // sort solutions into order of best fit
        usort($this->patterns,
            function ($a, $b) {
                if ($a['diff'] === $b['diff']) {
                    return 0;
                }
                else {
                    return ($a['diff'] < $b['diff'] ? -1 : 1);
                }
            }
        );
        return $this;
    }
}
