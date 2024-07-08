```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Dispenser (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Customcode**
> extends: ****
```uml
@startuml
class Dispenser  #Gold {
  + array $hub
  # Placeholder $placeholder
  # Customcode $customcode
  # Gui $gui
  # Hash $hash
  # LockBase $base64
  + __construct(?Placeholder $placeholder = null, ?Customcode $customcode = null, ...)
  + set(string $script, string $first, ...) : bool
  + get(string $first, string $second, ...) : mixed
  # initHub(string $first, ?string $second = null, ...) : void
  # setHub(string $script, string $first, ...) : void
}

note right of Dispenser::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    ?Placeholder $placeholder = null
    ?Customcode $customcode = null
    ?Gui $gui = null
    ?Hash $hash = null
    ?LockBase $base64 = null
end note

note right of Dispenser::set
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

note right of Dispenser::get
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

note right of Dispenser::initHub
  Make sure the hub arrays are all set
default: false

  since: 3.2.0
  return: void
  
  arguments:
    string $first
    ?string $second = null
    ?string $third = null
    bool $add = false
end note

note right of Dispenser::setHub
  Set a script in the hub
default: false

  since: 3.2.0
  return: void
  
  arguments:
    string $script
    string $first
    ?string $second = null
    ?string $third = null
    bool $add = false
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

