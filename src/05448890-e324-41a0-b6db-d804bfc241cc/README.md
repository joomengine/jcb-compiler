```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class FieldsetString (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**

```uml
@startuml
class FieldsetString << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Placeholder $placeholder
  # Language $language
  # Event $event
  # Permission $permission
  # FieldDynamic $fielddynamic
  # FieldNames $fieldnames
  # AccessSwitch $accessswitch
  # MetaData $metadata
  # Layout $layout
  # Counter $counter
  + __construct(Config $config, Placeholder $placeholder, ...)
  + get(array $view, string $component, ...) : string
}

note right of FieldsetString::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Placeholder $placeholder
    Language $language
    Event $event
    Permission $permission
    FieldDynamic $fielddynamic
    FieldNames $fieldnames
    AccessSwitch $accessswitch
    MetaData $metadata
    Layout $layout
    Counter $counter
end note

note right of FieldsetString::get
  Get a fieldset

  since: 3.2.0
  return: string
  
  arguments:
    array $view
    string $component
    string $nameSingleCode
    string $nameListCode
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---05448890_e324_41a0_b6db_d804bfc241cc---Power
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

