README
======

The question
------------

**"You own a license plate manufacturing company. Write a program that takes a population and determines the simplest pattern that will produce enough unique plates. Since all the plates that match the pattern will be generated, find the pattern that produces the least excess plates. Use a combination of letters (A-Z) and numbers (0-9)."**

In fact this question is not perfectly clear as these two sentences conflict:

(1)  "Write a program that takes a population and determines the simplest pattern that will produce enough unique plates."

 => suggests that minimizing the number of elements in the pattern is what is important.

(2)  "Since all the plates that match the pattern will be generated, find the pattern that produces the least excess plates."

=> suggests best pattern is that which minimises the number of excess plates. (The number of letters and numbers in the pattern is irrelevant here.)

These two requirements can conflict.

Our interpretation
------------------

How should we interpret the question then? Here, we choose to interpret it as (1) and, then in the event of multiple solutions of equal length, choose the one that best meets (2).

###Positions of elements fixed

In the case of (1), the number of plates generated for a given pattern is:

p = 10^x 26^y

where x and y are the numbers of numbers and letters respectively.

Importantly, this assumes that the positions of the letters and numbers in the license plate string are fixed. This is usually the case for license plates in real life. For example, the [pattern for the UK license plate](https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/British_car_registration_plate_labels.svg/551px-British_car_registration_plate_labels.svg.png) is:

BD51SMR

(Two letters, followed by two numbers, then by three more letters.)

###Positions random

Allowing the positions of the numbers and letters in the string to change complicates things; the number of permutations increases. We can capture this as:

p = 10^x 26^y ((x + y)! / (x! y!))

The second part of the expression, ((x + y)! / (x! y!)), captures the permutations of the letters and numbers combined. The denominator adjusts for the fact that we have permutations involving identical elements.

*Note: This version has not been implemented, but is an easy extension of the method.*

A note on the alternative interpretation
--------------------------

If we decided to make minimizing the number of surplus plates our primary focus (2), the maths becomes more complex. There are infinite real number solutions for x and y to the problem:

min:    p - 10^x 26^y ((x + y)! / (x! y!))

So to get integer solutions we cannot simply use differentiation to solve for min values and then round.

I have not yet found a solution to solving this problem. In either case, the favoured interpretation above seems more realistic scenario (we generally prefer shorter license plates).

A note of numbers in PHP
------------------------

The range of integers and floating point numbers in PHP varies according to the
C implementation for your platform.