```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ConfigFieldsets (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**

```uml
@startuml
class ConfigFieldsets << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Component $component
  # Event $event
  # Placeholder $placeholder
  # CPlaceholder $cplaceholder
  # ExtensionsParams $extensionsparams
  # Customfield $customfield
  # FieldAsString $fieldasstring
  # ConfigFieldsetsGlobal $configfieldsetsglobal
  # ConfigFieldsetsSiteControl $configfieldsetssitecontrol
  # ConfigFieldsetsGroupControl $configfieldsetsgroupcontrol
  # ConfigFieldsetsUikit $configfieldsetsuikit
  # ConfigFieldsetsGooglechart $configfieldsetsgooglechart
  # ConfigFieldsetsEmailHelper $configfieldsetsemailhelper
  # ConfigFieldsetsEncryption $configfieldsetsencryption
  # ConfigFieldsetsCustomfield $configfieldsetscustomfield
  + __construct(Config $config, Component $component, ...)
  + set(int $timer) : void
}

note right of ConfigFieldsets::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Component $component
    Event $event
    Placeholder $placeholder
    CPlaceholder $cplaceholder
    ExtensionsParams $extensionsparams
    Customfield $customfield
    FieldAsString $fieldasstring
    ConfigFieldsetsGlobal $configfieldsetsglobal
    ConfigFieldsetsSiteControl $configfieldsetssitecontrol
    ConfigFieldsetsGroupControl $configfieldsetsgroupcontrol
    ConfigFieldsetsUikit $configfieldsetsuikit
    ConfigFieldsetsGooglechart $configfieldsetsgooglechart
    ConfigFieldsetsEmailHelper $configfieldsetsemailhelper
    ConfigFieldsetsEncryption $configfieldsetsencryption
    ConfigFieldsetsCustomfield $configfieldsetscustomfield
end note

note right of ConfigFieldsets::set
  Set Config Fieldsets

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
Super---20cf1825_29d0_4c6c_8fe9_a1e13a4dac53---Power
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

