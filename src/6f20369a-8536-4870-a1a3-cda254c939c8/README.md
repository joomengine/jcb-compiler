```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Paths (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Utilities**
> extends: **Registry**

```uml
@startuml
class Paths  #Gold {
  # Config $config
  # Component $component
  + __construct(Config $config = null, Component $component = null)
  + __get(string $key) : string
  - setTemplatePath() : void
  - setComponentSalesName() : void
  - setComponentBackupName() : void
  - setComponentFolderName() : void
  - setComponentPath() : void
  - setTemplatePathCustom() : void
}

note right of Paths::__construct
  Constructor

  since: 3.2.0
end note

note left of Paths::__get
  getting any valid paths

  since: 3.2.0
  return: string
end note

note right of Paths::setTemplatePath
  Set the template path

  since: 3.2.0
  return: void
end note

note left of Paths::setComponentSalesName
  Set component sales name

  since: 3.2.0
  return: void
end note

note right of Paths::setComponentBackupName
  Set component backup name

  since: 3.2.0
  return: void
end note

note left of Paths::setComponentFolderName
  Set component folder name

  since: 3.2.0
  return: void
end note

note right of Paths::setComponentPath
  Set component path

  since: 3.2.0
  return: void
end note

note left of Paths::setTemplatePathCustom
  set the template path for custom TODO: just use custom_folder_path in config

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
Super---6f20369a_8536_4870_a1a3_cda254c939c8---Power
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

