```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ConfigFieldsetsSiteControl (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**

```uml
@startuml
class ConfigFieldsetsSiteControl << (F,LightGreen) >> #RoyalBlue {
  # Component $component
  # ConfigFieldsets $configfieldsets
  # Customfield $customfield
  # HasMenuGlobal $hasmenuglobal
  # FrontendParams $frontendparams
  # Request $request
  + __construct(Component $component, ConfigFieldsets $configfieldsets, ...)
  + set(string $lang) : void
}

note right of ConfigFieldsetsSiteControl::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Component $component
    ConfigFieldsets $configfieldsets
    Customfield $customfield
    HasMenuGlobal $hasmenuglobal
    FrontendParams $frontendparams
    Request $request
end note

note right of ConfigFieldsetsSiteControl::set
  Set Site Control Config Fieldsets

  since: 3.2.0
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
Super---aac8502a_dbdf_42b6_a9ba_2c2e941f8b11---Power
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

