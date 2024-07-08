```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface DispenserInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Interfaces\Customcode**
> extends: ****
```uml
@startuml
interface DispenserInterface  #Lavender {
  + set(string $script, string $first, ...) : bool
  + get(string $first, string $second, ...) : mixed
}

note right of DispenserInterface::set
  Set the script for the customcode dispenser
default: true
default: true
default: false

  since: 3.2.0
  return: bool
  
  arguments:
    string $script
    string $first
    ?string $second = null
    ?string $third = null
    array $config = []
    bool $base64 = true
    bool $dynamic = true
    bool $add = false
end note

note right of DispenserInterface::get
  Get the script from the customcode dispenser

  since: 3.2.0
  return: mixed
  
  arguments:
    string $first
    string $second
    string $prefix = ''
    ?string $note = null
    bool $unset = false
    mixed|null $default = null
    string $suffix = ''
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

