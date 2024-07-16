```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Folder (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Utilities**

```uml
@startuml
class Folder  #Gold {
  # Counter $counter
  # File $file
  + __construct(?Counter $counter = null, ?File $file = null)
  + create(string $path, bool $addHtml = true) : void
  + remove(string $path, ?array $ignore = null) : bool
  # shouldIgnore(string $basePath, string $filePath, ...) : bool
}

note right of Folder::__construct
  Constructor

  since: 3.2.0
end note

note right of Folder::create
  Create Path if not exist

  since: 3.2.0
  return: void
end note

note right of Folder::remove
  Remove folders with files

  since: 3.2.0
  return: bool
end note

note right of Folder::shouldIgnore
  Check if the current path should be ignored.

  since: 3.2.0
  return: bool
  
  arguments:
    string $basePath
    string $filePath
    ?array $ignore = null
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---6bbb6ffe_3f09_4c21_aa9d_c93159afa1e1---Power
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

