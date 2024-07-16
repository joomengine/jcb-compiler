```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Paths (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Customcode\Extractor**

```uml
@startuml
class Paths  #Gold {
  + array $active
  # array $componentPlaceholder
  # Config $config
  # Placeholder $placeholder
  # Customcode $customcode
  # Extractor $extractor
  # $db
  + __construct(?Config $config = null, ?Placeholder $placeholder = null, ...)
  # load() : void
  # getModuleIDs() : mixed
  # getModulePath($id) : mixed
  # getPluginIDs() : mixed
  # getPluginPath($id) : mixed
}

note right of Paths::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Placeholder $placeholder = null
    ?ComponentPlaceholder $componentPlaceholder = null
    ?Customcode $customcode = null
    ?Extractor $extractor = null
end note

note right of Paths::load
  get the local installed path of this component

  since: 3.2.0
  return: void
end note

note right of Paths::getModuleIDs
  get the Joomla Modules IDs

  since: 3.2.0
  return: mixed
end note

note right of Paths::getModulePath
  get the Joomla module path

  since: 3.2.0
  return: mixed
end note

note right of Paths::getPluginIDs
  get the Joomla plugins IDs

  since: 3.2.0
  return: mixed
end note

note right of Paths::getPluginPath
  get the Joomla plugin path

  return: mixed
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---053803e6_1251_4aed_aefe_46a8e84198d2---Power
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

