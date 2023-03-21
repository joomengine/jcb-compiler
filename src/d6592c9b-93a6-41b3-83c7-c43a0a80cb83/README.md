```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface LanguageInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Interfaces**
```uml
@startuml
interface LanguageInterface  #Lavender {
  + key(string $string) : string
  + exist(string $target, ?string $language = null) : bool
  + get(string $target, string $language) : string
  + getTarget(string $target) : array
  + setTarget(string $target, ?array $content) : void
  + set(string $target, string $language, ...) : void
}

note right of LanguageInterface::key
  Get the language string key

  since: 3.2.0
  return: string
end note

note right of LanguageInterface::exist
  check if the language string exist

  since: 3.2.0
  return: bool
end note

note right of LanguageInterface::get
  get the language string

  since: 3.2.0
  return: string
end note

note right of LanguageInterface::getTarget
  get target array

  since: 3.2.0
  return: array
end note

note right of LanguageInterface::setTarget
  set target array

  since: 3.2.0
  return: void
end note

note right of LanguageInterface::set
  set the language content values to language content array

  since: 3.2.0
  return: void
  
  arguments:
    string $target
    string $language
    string $string
    bool $addPrefix = false
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

