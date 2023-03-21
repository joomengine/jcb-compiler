```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface CustomcodeInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Interfaces**
```uml
@startuml
interface CustomcodeInterface  #Lavender {
  + update(string $string, int $debug) : string
  + set(string $string, int $debug, ...) : string
  + get(?array $ids = null, bool $setLang = true, ...) : bool
}

note right of CustomcodeInterface::update
  Update **ALL** dynamic values in a strings here
We can now at any time debug the
dynamic build values if it gets broken

  since: 3.2.0
  return: string
end note

note right of CustomcodeInterface::set
  Set the custom code data & can load it in to string

  since: 3.2.0
  return: string
  
  arguments:
    string $string
    int $debug
    ?int $not = null
end note

note right of CustomcodeInterface::get
  Load the custom code from the system

  since: 3.2.0
  return: bool
  
  arguments:
    ?array $ids = null
    bool $setLang = true
    int $debug
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

