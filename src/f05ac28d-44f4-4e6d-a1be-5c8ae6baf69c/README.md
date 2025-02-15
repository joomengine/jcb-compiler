```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Alias**

```uml
@startuml
class Data  #Gold {
  # array $index
  # array $allowedTables
  # Config $config
  # Registry $registry
  # Customcode $customcode
  # Gui $gui
  # Loader $loader
  # Libraries $libraries
  # $db
  + __construct(Config $config, Registry $registry, ...)
  + get(string $alias, string $table, ...) : ?array
  # getAliasId(string $alias, string $table) : ?int
  # set(string $table) : bool
}

note right of Data::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Registry $registry
    Customcode $customcode
    Gui $gui
    Loader $loader
    Libraries $libraries
end note

note right of Data::get
  Get Data by Alias

  since: 3.2.0
  return: ?array
  
  arguments:
    string $alias
    string $table
    string $view
end note

note right of Data::getAliasId
  Get the id of this alias

  since: 5.0.4
  return: ?int
end note

note right of Data::set
  Load all alias and ID's of a table

  since: 3.2.0
  return: bool
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---f05ac28d_44f4_4e6d_a1be_5c8ae6baf69c---Power
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

