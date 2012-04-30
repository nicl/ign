README
======

The question
------------

**"How many ping pong balls would it take to fill an average-sized school bus? Describe each step in your thought process."**

How to solve
------------

###Step 1. What are the dimensions of a ping pong ball?

According to the International Table Tennis Federation (ITTF) a table tennis ball should have a diameter of 40mm (so a radius of 20mm).

###Step 2. How tightly can you pack spheres?

Ping pong balls are not squares; for a given diameter/side, they can be packed together more tightly.

In fact, there are several ways in which spheres can be packed, with different packing densities (the proportion of the total space occupied by the spheres themselves). The problem of finding the sphere packing with the greatest packing density is known as the 'Kepler Problem' and a substantial literature exists for the subject.

According to [this](http://mathworld.wolfram.com/SpherePacking.html) article on Wolfram Alpha - I have not had time to survey the literature in depth myself(!) - the best known packing strategy is 'cubic' or 'hexagonal' close packing.

These approaches yield a packing density of &#960; / (3 &#x221A;2)

(Or, roughly, 0.7405).

Conversely, the loosest possible density (Gardner, 1966) is supposed to be 0.0555.

###Step 3. What kind of 'average'?

An average can be any measure of central tendency. Three well-known types are the mean, median, and mode.

###Step 4. Find or estimate bus internal volume

Bus volume might be available from a manufacturer's specifications. If not, an estimate would have to be made. We could fill it up with water (if it were water-tight), or attempt a rough estimate by physical measurement with a tape.

Depending on the type of average preferred, we may or may not have to combine estimates.

###Step 5. Calculate

We can calculate a rough answer by combining our knowledge of ping pong and bus dimensions, and sphere packing densities.

((volume of bus) * (packing density)) / (volume of ping pong ball sphere)

Note, the volume of a sphere is:

V = (4/3)&#960;r^3

###Step 6. But how do you close the bus door?

Hahahaha...

An Example
----------

Using:

- ping pong balls of radius of 20mm
- in a bus with internal volume of 10m x 2.5m x 2m (assume we have calculated this)
- and using cubic close packing (packing density = ~0.7405)

Then the answer is:

(10 x 2.5 x 2) * 0.7405 / ((4/3)&#960;0.02^3)

= 1,104,883 (rounded down)