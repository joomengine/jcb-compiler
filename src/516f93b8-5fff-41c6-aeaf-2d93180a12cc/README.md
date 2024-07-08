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
> extends: ****
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

