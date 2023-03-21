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
  + __construct(?Power $power = null, ?Config $config = null, ...)
  + set() : void
  - loadPluginAutoloader() : bool
  - loadHelperAutoloader() : bool
  - loadSiteAutoloader() : bool
  - getPluginAutoloader() : string
  - getHelperAutoloader() : string
  - getBLockSiteLoading() : ?string
  - getAutoloader(int $tabSpace) : ?string
  - getComposer(int $tabSpace) : ?string
}

note right of Autoloader::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    ?Power $power = null
    ?Config $config = null
    ?Content $content = null
end note

note left of Autoloader::set
  Set the autoloader into the active content array

  since: 3.2.0
  return: void
end note

note right of Autoloader::loadPluginAutoloader
  Should we load the plugin autoloader

  since: 3.2.0
  return: bool
end note

note left of Autoloader::loadHelperAutoloader
  Should we load the helper class autoloader

  since: 3.2.0
  return: bool
end note

note right of Autoloader::loadSiteAutoloader
  Should we load the autoloader in site area

  since: 3.2.0
  return: bool
end note

note left of Autoloader::getPluginAutoloader
  Get helper autoloader code

  since: 3.2.0
  return: string
end note

note right of Autoloader::getHelperAutoloader
  Get helper autoloader code

  since: 3.2.0
  return: string
end note

note left of Autoloader::getBLockSiteLoading
  Get code that will block the plugin from loading
the autoloader in the site area

  since: 3.2.0
  return: ?string
end note

note right of Autoloader::getAutoloader
  Get autoloader code

  since: 3.2.0
  return: ?string
end note

note left of Autoloader::getComposer
  Get the composer autoloader routine

  since: 3.2.0
  return: ?string
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

