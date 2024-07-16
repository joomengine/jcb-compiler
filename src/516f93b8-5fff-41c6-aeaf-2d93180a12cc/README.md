```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Utilities (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml
class Utilities  #Gold {
  + register(Container $container) : void
  + getFolder(Container $container) : Folder
  + getFile(Container $container) : File
  + getFileInjector(Container $container) : FileInjector
  + getCounter(Container $container) : Counter
  + getPaths(Container $container) : Paths
  + getFiles(Container $container) : Files
  + getConstantpaths(Container $container) : Constantpaths
  + getDynamicpath(Container $container) : Dynamicpath
  + getPathfix(Container $container) : Pathfix
  + getStructure(Container $container) : Structure
  + getXml(Container $container) : Xml
}

note right of Utilities::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Utilities::getFolder
  Get the Compiler Folder

  since: 3.2.0
  return: Folder
end note

note right of Utilities::getFile
  Get the Compiler File

  since: 3.2.0
  return: File
end note

note left of Utilities::getFileInjector
  Get The FileInjector Class.

  since: 3.2.0
  return: FileInjector
end note

note right of Utilities::getCounter
  Get the Compiler Counter

  since: 3.2.0
  return: Counter
end note

note left of Utilities::getPaths
  Get the Compiler Paths

  since: 3.2.0
  return: Paths
end note

note right of Utilities::getFiles
  Get the Compiler Files Bucket

  since: 3.2.0
  return: Files
end note

note left of Utilities::getConstantpaths
  Get the Constant Paths

  since: 3.2.0
  return: Constantpaths
end note

note right of Utilities::getDynamicpath
  Get the Compiler Dynamic Path

  since: 3.2.0
  return: Dynamicpath
end note

note left of Utilities::getPathfix
  Get the Compiler Path Fixer

  since: 3.2.0
  return: Pathfix
end note

note right of Utilities::getStructure
  Get the Compiler Structure Dynamic Builder

  since: 3.2.0
  return: Structure
end note

note left of Utilities::getXml
  Get the Compiler Xml Helper

  since: 3.2.0
  return: Xml
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---516f93b8_5fff_41c6_aeaf_2d93180a12cc---Power
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

