```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Dynamicget**

```uml
@startuml
class Data  #Gold {
  # array $guiMapper
  # Config $config
  # Registry $registry
  # Event $event
  # Customcode $customcode
  # Dispenser $dispenser
  # Gui $gui
  # Dynamicget $dynamic
  # $db
  + __construct(Config $config, Registry $registry, ...)
  + get(array $keys, string $view_code, ...) : ?array
  - getKeyTypes(array $keys) : array
}

note right of Data::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Registry $registry
    Event $event
    Customcode $customcode
    Dispenser $dispenser
    Gui $gui
    Dynamicget $dynamicget
end note

note right of Data::get
  Get Dynamic Get Data

  since: 3.2.0
  return: ?array
  
  arguments:
    array $keys
    string $view_code
    string $context
end note

note right of Data::getKeyTypes
  Get the key types

  since: 5.0.4
  return: array
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---05c49a1f_ba5b_4be1_b3d0_4a74c42f7a46---Power
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

