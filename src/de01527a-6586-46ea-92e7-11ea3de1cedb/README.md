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
> extends: ****
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
}

note right of Power::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Power::getPowers
  Get The Power Class.

  since: 3.2.0
  return: Powers
end note

note right of Power::getSuperpower
  Get The Super Class.

  since: 3.2.0
  return: Superpower
end note

note left of Power::getGrep
  Get The Grep Class.

  since: 3.2.0
  return: Grep
end note

note right of Power::getAutoloader
  Get The Autoloader Class.

  since: 3.2.0
  return: Autoloader
end note

note left of Power::getInfusion
  Get The Infusion Class.

  since: 3.2.0
  return: Infusion
end note

note right of Power::getStructure
  Get The Structure Class.

  since: 3.2.0
  return: Structure
end note

note left of Power::getParser
  Get The Parser Class.

  since: 3.2.0
  return: Parser
end note

note right of Power::getPlantuml
  Get The Plantuml Class.

  since: 3.2.0
  return: Plantuml
end note

note left of Power::getRepoReadme
  Get The Readme Class.

  since: 3.2.0
  return: RepoReadme
end note

note right of Power::getReposReadme
  Get The Readme Class.

  since: 3.2.0
  return: ReposReadme
end note

note left of Power::getExtractor
  Get The Extractor Class.

  since: 3.2.0
  return: Extractor
end note

note right of Power::getInjector
  Get The Injector Class.

  since: 3.2.0
  return: Injector
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

