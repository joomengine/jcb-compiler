```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Structure (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Power**

```uml
@startuml
class Structure  #Gold {
  # array $htaccess
  # array $done
  # Power $power
  # Config $config
  # Registry $registry
  # EventInterface $event
  # Counter $counter
  # Paths $paths
  # Folder $folder
  # File $file
  # Files $files
  # CMSApplication $app
  + __construct(?Power $power = null, ?Config $config = null, ...)
  + build() : void
  - createFile(string $content, string $fullPath, ...) : void
  - setHtaccess(object $power) : void
  - setDynamicFolders() : void
  - setSuperPowerDetails() : void
  - setSuperPowerFiles(object $power, string $bom) : void
  - loadExistingSuperPower(string $repository) : void
}

note right of Structure::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Power $power = null
    ?Config $config = null
    ?Registry $registry = null
    ?EventInterface $event = null
    ?Counter $counter = null
    ?Paths $paths = null
    ?Folder $folder = null
    ?File $file = null
    ?Files $files = null
    ?CMSApplication $app = null
end note

note left of Structure::build
  Build the Powers files, folders

  since: 3.2.0
  return: void
end note

note right of Structure::createFile
  Create a file with optional custom content and save it to the given path.

  since: 3.2.0
  return: void
  
  arguments:
    string $content
    string $fullPath
    string $fileName
    string $key
end note

note left of Structure::setHtaccess
  Set the .htaccess for this power path

  since: 3.2.0
  return: void
end note

note right of Structure::setDynamicFolders
  Add the dynamic folders

  since: 3.2.0
  return: void
end note

note left of Structure::setSuperPowerDetails
  Set the super powers details structure

  since: 3.2.0
  return: void
end note

note right of Structure::setSuperPowerFiles
  Set the super power file paths

  since: 3.2.0
  return: void
end note

note left of Structure::loadExistingSuperPower
  Set the super power file paths

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
Super---324566de_0f7d_4b6e_9caf_8424d55013ae---Power
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

