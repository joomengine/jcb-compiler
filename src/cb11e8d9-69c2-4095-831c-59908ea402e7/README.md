```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Joomlamodule**

```uml
@startuml
class Data  #Gold {
  # array $data
  # array $index
  # Config $config
  # Customcode $customcode
  # Gui $gui
  # Placeholder $placeholder
  # Language $language
  # Field $field
  # Fieldname $fieldname
  # Filesfolders $filesfolders
  # Libraries $libraries
  # Dynamicget $dynamicget
  # Templatelayout $templatelayout
  # $db
  + __construct(Config $config, Customcode $customcode, ...)
  + get(int|string|null $module = null) : object|array|null
  + exists(int|string|null $module = null) : bool
  + set(mixed $module) : bool
  - getQuery(mixed $value, string $key = 'id') : string
  - getData(string $query) : ?object
}

note right of Data::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Customcode $customcode
    Gui $gui
    Placeholder $placeholder
    Language $language
    Field $field
    Fieldname $fieldname
    Filesfolders $filesfolders
    Libraries $libraries
    Dynamicget $dynamicget
    Templatelayout $templatelayout
end note

note right of Data::get
  Get the Joomla Module/s

  since: 3.2.0
  return: object|array|null
end note

note right of Data::exists
  Check if the Joomla Module/s exists

  since: 3.2.0
  return: bool
end note

note right of Data::set
  Set the module

  since: 5.0.4
  return: bool
end note

note right of Data::getQuery
  get current plugin data query

  since: 5.0.4
  return: string
end note

note right of Data::getData
  get module data

  since: 5.0.4
  return: ?object
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---cb11e8d9_69c2_4095_831c_59908ea402e7---Power
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

