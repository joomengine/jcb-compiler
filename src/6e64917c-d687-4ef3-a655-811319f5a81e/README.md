```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Autoloader (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Power**

```uml
@startuml
class Autoloader  #Gold {
  # Power $power
  # Config $config
  # Content $content
  # string $helper
  + __construct(Power $power, Config $config, ...)
  + setFiles() : void
  + set() : void
  - getHelperAutoloader() : string
  - getAutoloaderFile(int $tabSpace, string $area = 'JPATH_ADMINISTRATOR') : ?string
  - getAutoloader(int $tabSpace) : ?string
  - getComposer(int $tabSpace) : ?string
}

note right of Autoloader::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Power $power
    Config $config
    Content $content
end note

note right of Autoloader::setFiles
  Set the autoloader into the active content array

  since: 3.2.0
  return: void
end note

note right of Autoloader::set
  Set the autoloader into the active content array

  since: 3.2.0
  return: void
end note

note right of Autoloader::getHelperAutoloader
  Get helper autoloader code

  since: 3.2.0
  return: string
end note

note right of Autoloader::getAutoloaderFile
  Get autoloader file

  since: 3.2.1
  return: ?string
end note

note right of Autoloader::getAutoloader
  Get autoloader code

  since: 3.2.0
  return: ?string
end note

note right of Autoloader::getComposer
  Get the composer autoloader routine

  since: 3.2.0
  return: ?string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---6e64917c_d687_4ef3_a655_811319f5a81e---Power
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

