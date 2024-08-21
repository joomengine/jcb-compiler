```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Structure (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Joomlaplugin\JoomlaThree**

```uml
@startuml
class Structure  #Gold {
  # Plugin $plugin
  # Component $component
  # Config $config
  # Registry $registry
  # Dispenser $dispenser
  # Event $event
  # Counter $counter
  # Folder $folder
  # File $file
  # Files $files
  + __construct(Plugin $plugin, Component $component, ...)
  + build() : void
  # getXML(object $plugin) : string
  # pluginPath(object $plugin) : void
  # setMainClassFile(object $plugin) : void
  # setMainXmlFile(object $plugin) : void
  # setInstallScript(object $plugin) : void
  # setReadme(object $plugin) : void
  # setForms(object $plugin) : void
  # setSQL(object $plugin) : void
  # setFiles(object $plugin) : void
  # setFolders(object $plugin) : void
  # setUrls(object $plugin) : void
}

note right of Structure::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Plugin $plugin
    Component $component
    Config $config
    Registry $registry
    Dispenser $dispenser
    Event $event
    Counter $counter
    Folder $folder
    File $file
    Files $files
end note

note left of Structure::build
  Build the Plugins files, folders, url's and config

  since: 3.2.0
  return: void
end note

note right of Structure::getXML
  get the plugin xml template

  since: 3.2.0
  return: string
end note

note left of Structure::pluginPath
  set the plugin path

  since: 3.2.0
  return: void
end note

note right of Structure::setMainClassFile
  set the main class path

  since: 3.2.0
  return: void
end note

note left of Structure::setMainXmlFile
  set the main xml file

  since: 3.2.0
  return: void
end note

note right of Structure::setInstallScript
  set the install script file

  since: 3.2.0
  return: void
end note

note left of Structure::setReadme
  set the readme file

  since: 3.2.0
  return: void
end note

note right of Structure::setForms
  set the form files and folders

  since: 3.2.0
  return: void
end note

note left of Structure::setSQL
  set the sql stuff

  since: 3.2.0
  return: void
end note

note right of Structure::setFiles
  set the files

  since: 3.2.0
  return: void
end note

note left of Structure::setFolders
  set the folders

  since: 3.2.0
  return: void
end note

note right of Structure::setUrls
  set the urls

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
Super---a900b836_f2eb_4f13_8f28_b7cac839c7ff---Power
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

