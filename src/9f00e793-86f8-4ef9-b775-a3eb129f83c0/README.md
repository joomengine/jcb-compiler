```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Language (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
```uml
@startuml
class Language  #Gold {
  + register(Container $container) : void
  + getLanguage(Container $container) : CompilerLanguage
  + getLanguageExtractor(Container $container) : Extractor
}

note right of Language::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Language::getLanguage
  Get the Compiler Language

  since: 3.2.0
  return: CompilerLanguage
end note

note right of Language::getLanguageExtractor
  Get the Compiler Language Extractor

  since: 3.2.0
  return: Extractor
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

