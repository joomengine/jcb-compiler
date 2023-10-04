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
  + getCompilerLanguage(Container $container) : CompilerLanguage
  + getExtractor(Container $container) : Extractor
  + getFieldset(Container $container) : Fieldset
}

note right of Language::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Language::getCompilerLanguage
  Get The Language Class.

  since: 3.2.0
  return: CompilerLanguage
end note

note right of Language::getExtractor
  Get The Extractor Class.

  since: 3.2.0
  return: Extractor
end note

note right of Language::getFieldset
  Get The Fieldset Class.

  since: 3.2.0
  return: Fieldset
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

