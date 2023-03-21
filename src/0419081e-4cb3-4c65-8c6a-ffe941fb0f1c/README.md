```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Infusion (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Power**
```uml
@startuml
class Infusion  #Gold {
  # Config $config
  # Power $power
  # Content $content
  # Autoloader $autoloader
  # Parser $parser
  # RepoReadme $reporeadme
  # ReposReadme $reposreadme
  # Placeholder $placeholder
  # Event $event
  # array $linker
  + __construct(?Config $config = null, ?Power $power = null, ...)
  + set() : void
  - parsePowers() : void
  - setSuperPowers() : void
  - setPowers() : void
  - index(array $powers) : string
  - code(object $power) : string
  - linker(object $power) : string
}

note right of Infusion::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Power $power = null
    ?Content $content = null
    ?Autoloader $autoloader = null
    ?Parser $parser = null
    ?RepoReadme $reporeadme = null
    ?ReposReadme $reposreadme = null
    ?Placeholder $placeholder = null
    ?Event $event = null
end note

note left of Infusion::set
  Infuse the powers data with the content

  since: 3.2.0
  return: void
end note

note right of Infusion::parsePowers
  We parse the powers to get the class map of all methods

  since: 3.2.0
  return: void
end note

note left of Infusion::setSuperPowers
  Set the Super Powers details

  since: 3.2.0
  return: void
end note

note right of Infusion::setPowers
  Set the Powers code

  since: 3.2.0
  return: void
end note

note left of Infusion::index
  Build the Super Power Index

  since: 3.2.0
  return: string
end note

note right of Infusion::code
  Get the Power code

  since: 3.2.0
  return: string
end note

note left of Infusion::linker
  Get the Power Linker

  since: 3.2.0
  return: string
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

