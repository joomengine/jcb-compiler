```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Updatesql (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**

```uml
@startuml
class Updatesql  #Gold {
  # array $name
  # Registry $registry
  + __construct(?Registry $registry = null)
  + set(mixed $old, mixed $new, ...) : void
  # add(string $type, int $item, ...) : void
  # name(int $id) : string
}

note right of Updatesql::__construct
  Constructor

  since: 3.2.0
end note

note right of Updatesql::set
  check if an update SQL is needed

  since: 3.2.0
  return: void
  
  arguments:
    mixed $old
    mixed $new
    string $type
    mixed $key = null
    ?array $ignore = null
end note

note right of Updatesql::add
  Set the add sql

  since: 3.2.0
  return: void
  
  arguments:
    string $type
    int $item
    mixed $key = null
end note

note right of Updatesql::name
  Get the Admin view table name

  since: 3.2.0
  return: string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---b80296eb_4718_4ed3_894d_69f3ac293733---Power
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

