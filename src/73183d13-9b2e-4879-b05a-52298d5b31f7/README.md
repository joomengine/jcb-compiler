```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class InstallScript (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Extension\JoomlaFive**

```uml
@startuml
class InstallScript << (F,LightGreen) >> #RoyalBlue {
  # object $extension
  # array $methods
  # array $types
  # array $construct
  # array $install
  # array $update
  # array $uninstall
  # bool $preflightActive
  # bool $postflightActive
  # array $removeFilePaths
  # array $removeFolderPaths
  # $app
  # array $deleteFiles
  # array $deleteFolders
  + get(object $extension) : string
  # rest() : void
  # build() : string
  # head() : string
  # construct() : string
  # main(string $name) : string
  # flight(string $name) : string
  # removeFiles() : string
}

note right of InstallScript::get
  get install script

  since: 3.2.0
  return: string
end note

note left of InstallScript::rest
  Reset all bucket at the start of each build

  since: 3.2.0
  return: void
end note

note right of InstallScript::build
  build the install class

  since: 3.2.0
  return: string
end note

note left of InstallScript::head
  get install script head

  since: 3.2.0
  return: string
end note

note right of InstallScript::construct
  get constructor

  since: 3.2.0
  return: string
end note

note left of InstallScript::main
  build main methods

  since: 3.2.0
  return: string
end note

note right of InstallScript::flight
  build flight methods

  since: 3.2.0
  return: string
end note

note left of InstallScript::removeFiles
  build remove files methods

  since: 5.0.2
  return: string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---73183d13_9b2e_4879_b05a_52298d5b31f7---Power
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

