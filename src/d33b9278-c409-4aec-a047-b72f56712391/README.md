```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Extractor (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Language**
```uml
@startuml
class Extractor  #Gold {
  + array $langKeys
  + array $langMismatch
  + array $langMatch
  # Config $config
  # Placeholder $placeholder
  # Language $language
  + __construct(?Config $config = null, ?Language $language = null, ...)
  + engine(string $content) : string
}

note right of Extractor::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Language $language = null
    ?Placeholder $placeholder = null
end note

note right of Extractor::engine
  Extract Language Strings

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

