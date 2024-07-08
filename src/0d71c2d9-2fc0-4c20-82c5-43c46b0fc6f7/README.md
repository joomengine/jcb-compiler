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
> extends: ****
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

