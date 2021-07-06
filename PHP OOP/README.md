PHP What is OOP?
---------------------
OOP stands for Object-Oriented Programming.

Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions.

Object-oriented programming has several advantages over procedural programming:

1. OOP is faster and easier to execute
2. OOP provides a clear structure for the programs
3. OOP helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug
4. OOP makes it possible to create full reusable applications with less code and shorter development time

<strong>Tip:</strong> The "Don't Repeat Yourself" (DRY) principle is about reducing the repetition of code. You should extract out the codes that are common for the application, and place them at a single place and reuse them instead of repeating it.

PHP - What are Classes and Objects?
---------------------------------------
Classes and objects are the two main aspects of object-oriented programming.
A class is a template for objects, and an object is an instance of class.

When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

OOP Case
-------------
Let's assume we have a class named Fruit. A Fruit can have properties like name, color, weight, etc. We can define variables like $name, $color, and $weight to hold the values of these properties.

When the individual objects (apple, banana, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

Define a Class
-----------------
A class is defined by using the <code>class</code> keyword, followed by the name of the class and a pair of curly braces ({}). All its properties and methods go inside the braces:

<h4>Syntax</h4>
<pre> 
class Fruit {
    // code goes here...
}
</pre>

Below we declare a class named Fruit consisting of two properties ($name and $color) and two methods set_name() and get_name() for setting and getting the $name property:

<h4>Example</h4>
<pre>
class Fruit {
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}
</pre>

<strong>Note: In a class, variables are called properties and functions are called methods!</strong>

Define Objects
------------------
Classes are nothing without objects! We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values.

Objects of a class is created using the <code>new</code> keyword.

In the example below, $apple and $banana are instances of the class Fruit:

PHP - The $this Keyword
------------------------
The $this keyword refers to the current object, and is only available inside methods.

Look at the following example:
<pre>
class Fruit {
  public $name;
}
$apple = new Fruit();
</pre>

So, where can we change the value of the $name property? There are two ways:

1. Inside the class (by adding a set_name() method and use $this):

<h4>Example</h4>
<pre>
class Fruit {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$apple = new Fruit();
$apple->set_name("Apple");
</pre>
2. Outside the class (by directly changing the property value):
<h4>Example</h4>
<pre>
class Fruit {
  public $name;
}
$apple = new Fruit();
$apple->name = "Apple";
</pre>

PHP - The __construct Function
--------------------------------
A constructor allows you to initialize an object's properties upon creation of the object.

If you create a <code>__construct()</code> function, PHP will automatically call this function when you create an object from a class.

Notice that the construct function starts with two underscores (__)!

We see in the example below, that using a constructor saves us from calling the set_name() method which reduces the amount of code:

PHP - The __destruct Function
--------------------------------
A destructor is called when the object is destructed or the script is stopped or exited.

If you create a __destruct() function, PHP will automatically call this function at the end of the script.

Notice that the destruct function starts with two underscores (__)!

The example below has a __construct() function that is automatically called when you create an object from a class, and a __destruct() function that is automatically called at the end of the script:

PHP - Access Modifiers
-------------------------
Properties and methods can have access modifiers which control where they can be accessed.

There are three access modifiers:

1. <strong>public</strong> - the property or method can be accessed from everywhere. This is default
2. <strong>protected</strong> - the property or method can be accessed within the class and by classes derived from that class
3. <strong>private</strong> - the property or method can ONLY be accessed within the class

In the following example we have added three different access modifiers to the three properties. Here, if you try to set the name property it will work fine (because the name property is public). However, if you try to set the color or weight property it will result in a fatal error (because the color and weight property are protected and private):

PHP - What is Inheritance?
---------------------------
Inheritance in OOP = When a class derives from another class.

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

An inherited class is defined by using the <code>extends</code> keyword.