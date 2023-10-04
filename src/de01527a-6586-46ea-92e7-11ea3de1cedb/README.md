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
  + getSuperpower(Container $container) : Superpower
  + getGrep(Container $container) : Grep
  + getAutoloader(Container $container) : Autoloader
  + getInfusion(Container $container) : Infusion
  + getStructure(Container $container) : Structure
  + getParser(Container $container) : Parser
  + getPlantuml(Container $container) : Plantuml
  + getRepoReadme(Container $container) : RepoReadme
  + getReposReadme(Container $container) : ReposReadme
  + getExtractor(Container $container) : Extractor
  + getInjector(Container $container) : Injector
  + getModelUpsert(Container $container) : Upsert
  + getInsert(Container $container) : Insert
  + getUpdate(Container $container) : Update
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

note right of Power::getSuperpower
  Get the Superpower

  since: 3.2.0
  return: Superpower
end note

note left of Power::getGrep
  Get the Grep

  since: 3.2.0
  return: Grep
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

note left of Power::getExtractor
  Get the Compiler Power Extractor

  since: 3.2.0
  return: Extractor
end note

note right of Power::getInjector
  Get the Compiler Power Injector

  since: 3.2.0
  return: Injector
end note

note left of Power::getModelUpsert
  Get the Power Model Upsert

  since: 3.2.0
  return: Upsert
end note

note right of Power::getInsert
  Get the Power Insert

  since: 3.2.0
  return: Insert
end note

note left of Power::getUpdate
  Get the Power Update

  since: 3.2.0
  return: Update
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

