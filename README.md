# Object Oriented Programming in PHP

## $this keyword
  The $this keyword indicates that we use the class’s own methods and properties, and
allows us to have access to them within the class’s scope.

## Access modifiers: public vs private vs protected
  - While the public access modifier allows a code from outside or inside the class to access the class’s
methods and properties, the private modifier prevents access to a class’s methods or properties from
any code that is outside the class.
  
  - When we declare a property or a method as protected, we can approach it from both
the parent and the child classes.

## Inheritance
  - Inheritance allows us to write the code only once in the parent, and then use the code
in both the parent and the child classes.

  - In order to declare that one class inherits the code from another class, we use the extends keyword.

## Abstract classes

  - We use abstract classes and methods when we need to commit the child classes to certain
methods that they inherit from the parent class but we cannot commit about the code
that should be written inside the methods.

  - An abstract class is a class that has at least one abstract method. Abstract methods can only have
names and arguments, and no other code.

  - we cannot create objects out of abstract classes.

  - In order to declare a class as abstract, we need to prefix the name of the class with the abstract
keyword.

  
 
## Interfaces
  - Interfaces resemble abstract classes in that they include abstract methods that the programmer
must define in the classes that inherit from the interface..

  - We declare an interface with the interface keyword and, the class that inherits from an interface
with the implements keyword.




## Polymorphism
  - According to the Polymorphism principle, methods in different classes that do similar
things should have the same name.

  - In order to implement the polymorphism principle, we can choose between abstract
classes and interfaces.

## Traits
  - Traits resemble classes in that they group together code elements under a common name.
  - A class can use more than one trait.
  - Traits use a form of inheritance that is known as horizontal inheritance in which the code
    from the trait is included in the classes in which it is used. It is pretty much like using ‘require’
    or ‘include’ in the classes to include code from the outside, albeit not hackish.
  
  - In a trait it is possible to put concrete (real) methods, abstract methods, properties and even
    constants
  
