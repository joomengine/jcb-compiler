```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Structure (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Utilities**

```uml
@startuml
class Structure  #Gold {
  # Placeholder $placeholder
  # Settings $settings
  # Paths $paths
  # Counter $counter
  # File $file
  # Files $files
  # CMSApplication $app
  + __construct(Placeholder $placeholder, Settings $settings, ...)
  + build(array $target, string $type, ...) : bool
  - getFileDetails(object $details, string $item, ...) : ?array
  - getPath(object $details, string $zipPath, ...) : ?string
  - getNewName(object $details, string $item, ...) : string
}

note right of Structure::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Placeholder $placeholder
    Settings $settings
    Paths $paths
    Counter $counter
    File $file
    Files $files
    ?CMSApplication $app = null
end note

note right of Structure::build
  Build Structural Needed Files & Folders

  since: 3.2.0
  return: bool
  
  arguments:
    array $target
    string $type
    ?string $fileName = null
    ?array $config = null
end note

note right of Structure::getFileDetails
  Get the details

  since: 3.2.0
  return: ?array
  
  arguments:
    object $details
    string $item
    string $name
    ?string $fileName = null
    ?array $config = null
end note

note right of Structure::getPath
  Get the path

  since: 3.2.0
  return: ?string
  
  arguments:
    object $details
    string $zipPath
    string $name
end note

note right of Structure::getNewName
  Get the new name

  since: 3.2.0
  return: string
  
  arguments:
    object $details
    string $item
    string $name
    ?string $fileName = null
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---1efdded5_d6c8_452c_8f37_0374483a7b3f---Power
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

