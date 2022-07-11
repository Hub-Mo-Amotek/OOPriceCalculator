# OOPriceCalculator
#  team
Lucas | Mo  | Michael 

--------------------

>Day 1 :
standing meeting. talked about how we where going to talk this.
started to configure everything we need to work on it.
making repo, adding contributor. making a file structure(MVC) etc.

>day 2 : added .env file to get acces to data base. connected to the database
> executed some tests. made dropdowns with all the customers and products in the home View.

>day 3 : started to add the logic. 

To calculate the price:

* [x] For the customer group: In case of variable discounts look for highest discount of all the groups the user has.
* [x] If some groups have fixed discounts, count them all up.
* [x] Look which discount (fixed or variable) will give the customer the most value.
* [x] Now look at the discount of the customer.
* [] In case both customer and customer group have a percentage, take the largest percentage.
* [] First subtract fixed amounts, then percentages!
     A price can never be negative.
