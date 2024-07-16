```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Structuresingle (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Component**

```uml
@startuml
class Structuresingle << (F,LightGreen) >> #RoyalBlue {
  # string $newName
  # string $currentFullPath
  # string $packageFullPath
  # string $zipFullPath
  # Config $config
  # Registry $registry
  # Placeholder $placeholder
  # Settings $settings
  # Component $component
  # Content $content
  # Counter $counter
  # Paths $paths
  # Files $files
  # CMSApplication $app
  + __construct(Config $config, Registry $registry, ...)
  + build() : bool
  - doLicenseCheck() : bool
  - doReadmeCheck() : bool
  - doChangelogCheck() : bool
  - setNewName(object $details) : void
  - setPaths(object $details) : void
  - pathExist(object $details) : bool
  - setTarget(string $target, object $details) : void
  - moveFile() : void
  - registerFile(string $target, object $details) : void
  - setDynamicTarget(object $details) : void
  - setDynamicFolders() : void
}

note right of Structuresingle::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Registry $registry
    Placeholder $placeholder
    Settings $settings
    Component $component
    Content $content
    Counter $counter
    Paths $paths
    Files $files
    ?CMSApplication $app = null
end note

note left of Structuresingle::build
  Build the Single Files & Folders

  since: 3.2.0
  return: bool
end note

note right of Structuresingle::doLicenseCheck
  Check if license must be added

  since: 3.2.0
  return: bool
end note

note left of Structuresingle::doReadmeCheck
  Check if readme must be added

  since: 3.2.0
  return: bool
end note

note right of Structuresingle::doChangelogCheck
  Check if changelog must be added

  since: 3.2.0
  return: bool
end note

note left of Structuresingle::setNewName
  Set the new name

  since: 3.2.0
  return: void
end note

note right of Structuresingle::setPaths
  Set all needed paths

  since: 3.2.0
  return: void
end note

note left of Structuresingle::pathExist
  Check if path exists

  since: 3.2.0
  return: bool
end note

note right of Structuresingle::setTarget
  Set the target based on target type

  since: 3.2.0
  return: void
end note

note left of Structuresingle::moveFile
  Move/Copy the file into place

  since: 3.2.0
  return: void
end note

note right of Structuresingle::registerFile
  Register the file

  since: 3.2.0
  return: void
end note

note left of Structuresingle::setDynamicTarget
  Set Dynamic Target

  since: 3.2.0
  return: void
end note

note right of Structuresingle::setDynamicFolders
  Add the dynamic folders

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
Super---673954d3_78d3_445a_b99f_4b40d617c882---Power
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

