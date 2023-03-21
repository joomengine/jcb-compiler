```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Power (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
```uml
@startuml
class Power  #Gold {
  + register(Container $container) : void
  + getPowers(Container $container) : Powers
  + getAutoloader(Container $container) : Autoloader
  + getInfusion(Container $container) : Infusion
  + getStructure(Container $container) : Structure
  + getParser(Container $container) : Parser
  + getPlantuml(Container $container) : Plantuml
  + getRepoReadme(Container $container) : RepoReadme
  + getReposReadme(Container $container) : ReposReadme
}

note right of Power::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Power::getPowers
  Get the Powers

  since: 3.2.0
  return: Powers
end note

note right of Power::getAutoloader
  Get the Compiler Autoloader

  since: 3.2.0
  return: Autoloader
end note

note left of Power::getInfusion
  Get the Compiler Power Infusion

  since: 3.2.0
  return: Infusion
end note

note right of Power::getStructure
  Get the Compiler Power Structure Builder

  since: 3.2.0
  return: Structure
end note

note left of Power::getParser
  Get the Compiler Power Parser

  since: 3.2.0
  return: Parser
end note

note right of Power::getPlantuml
  Get the Compiler Power Plantuml Builder

  since: 3.2.0
  return: Plantuml
end note

note left of Power::getRepoReadme
  Get the Compiler Power Repo Readme Builder

  since: 3.2.0
  return: RepoReadme
end note

note right of Power::getReposReadme
  Get the Compiler Power Repos Readme Builder

  since: 3.2.0
  return: ReposReadme
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

