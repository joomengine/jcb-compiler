```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Joomlaplugin\JoomlaFour**

```uml
@startuml
class Data << (F,LightGreen) >> #RoyalBlue {
  # array $data
  # array $index
  # Config $config
  # Customcode $customcode
  # Gui $gui
  # Placeholder $placeholder
  # Language $language
  # Field $field
  # FieldName $fieldname
  # Filesfolders $filesfolders
  # $db
  + __construct(Config $config, Customcode $customcode, ...)
  + get(int|string|null $plugin = null) : object|array|null
  + exists(int|string|null $plugin = null) : bool
  + set(int|string|null $plugin) : bool
  - getQuery(mixed $value, string $key = 'id') : string
  - getData(string $query) : ?object
  - setReadme(object $plugin) : void
  - setDescription(object $plugin) : void
  - setPlaceholders(object $plugin) : void
  - clearPlaceholders() : void
}

note right of Data::__construct
  Constructor.

  since: 5.0.2
  
  arguments:
    Config $config
    Customcode $customcode
    Gui $gui
    Placeholder $placeholder
    Language $language
    Field $field
    FieldName $fieldname
    Filesfolders $filesfolders
end note

note left of Data::get
  Get the Joomla Plugin/s

  since: 3.2.0
  return: object|array|null
end note

note right of Data::exists
  Check if the Joomla Plugin/s exists

  since: 3.2.0
  return: bool
end note

note left of Data::set
  Set the plugin

  since: 5.0.4
  return: bool
end note

note right of Data::getQuery
  get current plugin data query

  since: 5.0.4
  return: string
end note

note left of Data::getData
  get plugin data

  since: 5.0.4
  return: ?object
end note

note right of Data::setReadme
  Sets plugin readme.

  since: 5.0.4
  return: void
end note

note left of Data::setDescription
  Sets plugin description.

  since: 5.0.4
  return: void
end note

note right of Data::setPlaceholders
  Sets the placeholders for this view

  since: 5.0.4
  return: void
end note

note left of Data::clearPlaceholders
  Clear the placeholders for this plugin

  since: 5.0.4
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
Super---361e08c0_5916_4b77_b6a2_c16a769bbc40---Power
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

