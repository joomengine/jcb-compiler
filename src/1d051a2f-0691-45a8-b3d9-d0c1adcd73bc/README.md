```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Insert (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Language**

```uml
@startuml
class Insert << (F,LightGreen) >> #RoyalBlue {
  # array $items
  # $db
  + __construct()
  + set(string $target, int $counter, ...) : void
  + execute(string $target, int $when = 1) : void
}

note right of Insert::__construct
  Constructor.

  since: 5.0.2
end note

note right of Insert::set
  Sets a value in a multi-dimensional array within the `items` property.
This method ensures that the array structure is properly initialized before
inserting the value at the specified target and counter position.

  since: 5.0.2
  return: void
  
  arguments:
    string $target
    int $counter
    string $value
end note

note right of Insert::execute
  Store the language placeholders and execute the database insert operation.
This method checks if the target key exists in the `items` array and if the count
of its elements meets or exceeds the specified threshold (`$when`). If the conditions
are met, it constructs and executes a database insert query to store the language
placeholders. The array of items for the target is then cleared.

  since: 5.0.2
  return: void
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---1d051a2f_0691_45a8_b3d9_d0c1adcd73bc---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

