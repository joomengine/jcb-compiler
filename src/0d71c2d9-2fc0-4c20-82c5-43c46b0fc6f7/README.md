```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Loader (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**

```uml
@startuml
class Loader  #Gold {
  # Config $config
  # FootableScripts $footablescripts
  # GoogleChart $googlechart
  # GetModule $getmodule
  # UikitComp $uikitcomp
  + __construct(Config $config, FootableScripts $footablescripts, ...)
  + set(string $key, string $content, ...) : void
  + uikit(string $key, string $content) : void
  # getFootableScripts(string $content) : bool
  # getGetModule(string $content) : bool
  # getGoogleChart(string $content) : bool
}

note right of Loader::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    FootableScripts $footablescripts
    GoogleChart $googlechart
    GetModule $getmodule
    UikitComp $uikitcomp
end note

note right of Loader::set
  Automatically load some stuff

  since: 3.2.0
  return: void
  
  arguments:
    string $key
    string $content
    ?string $target = null
end note

note right of Loader::uikit
  Automatically load uikit version 2 data files

  since: 3.2.0
  return: void
end note

note right of Loader::getFootableScripts
  Check for footable scripts

  since: 3.2.0
  return: bool
end note

note right of Loader::getGetModule
  Check for getModules script

  since: 3.2.0
  return: bool
end note

note right of Loader::getGoogleChart
  Check for get Google Chart script

  since: 3.2.0
  return: bool
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---0d71c2d9_2fc0_4c20_82c5_43c46b0fc6f7---Power
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

