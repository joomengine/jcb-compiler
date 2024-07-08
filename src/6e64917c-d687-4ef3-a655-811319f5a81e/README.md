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
> extends: ****
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

