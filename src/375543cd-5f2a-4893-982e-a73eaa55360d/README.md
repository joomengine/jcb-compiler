```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Update (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Language**

```uml
@startuml
class Update << (F,LightGreen) >> #RoyalBlue {
  # array $items
  # $db
  # $user
  + __construct()
  + set(int $id, string $target, ...) : void
  + execute(int $when = 1) : void
}

note right of Update::__construct
  Constructor.

  since: 5.0.2
end note

note right of Update::set
  Add a language string to the existing language strings array for updating.
This method prepares and stores the update information for a language string
in the `items` array, which is later used by the `execute` method to update
the database.

  since: 5.0.2
  return: void
  
  arguments:
    int $id
    string $target
    array $targets
    int $published
    string $today
    int $counter
end note

note right of Update::execute
  Update the language placeholders in the database.
This method updates the language placeholders in the database if the number of items
meets or exceeds the specified threshold (`$when`). It constructs and executes an
update query for each set of values in the `items` array.

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
Super---375543cd_5f2a_4893_982e_a73eaa55360d---Power
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

