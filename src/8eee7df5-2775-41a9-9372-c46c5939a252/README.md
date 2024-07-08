```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Language (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler**
> extends: ****
```uml
@startuml
class Language  #Gold {
  # array $content
  # Config $config
  + __construct(?Config $config = null)
  + key(string $string) : string
  + exist(string $target, ?string $language = null) : bool
  + get(string $target, string $language) : string
  + getTarget(string $target) : array
  + setTarget(string $target, ?array $content) : void
  + set(string $target, string $language, ...) : void
  + fix(string $string) : string
}

note right of Language::__construct
  Constructor.

  since: 3.2.0
end note

note left of Language::key
  Get the language string key

  since: 3.2.0
  return: string
end note

note right of Language::exist
  check if the language string exist

  since: 3.2.0
  return: bool
end note

note left of Language::get
  get the language string

  since: 3.2.0
  return: string
end note

note right of Language::getTarget
  get target array

  since: 3.2.0
  return: array
end note

note left of Language::setTarget
  set target array

  since: 3.2.0
  return: void
end note

note right of Language::set
  set the language content values to language content array

  since: 3.2.0
  return: void
  
  arguments:
    string $target
    string $language
    string $string
    bool $addPrefix = false
end note

note left of Language::fix
  Removes all types of line breaks from a given string.
This method is designed to strip out all kinds of new line characters from the input string
to ensure a single-line output. It takes into consideration different operating systems'
line endings, including the combination of Carriage Return and Line Feed.

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

