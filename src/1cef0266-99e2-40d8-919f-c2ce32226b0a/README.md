```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class External (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Customcode**
```uml
@startuml
class External  #Gold {
  # array $code
  # array $cutter
  # Placeholder $placeholder
  # \JDatabaseDriver $db
  # User $user
  # CMSApplication $app
  + __construct(?Placeholder $placeholder = null, ?\JDatabaseDriver $db = null, ...)
  + set(string $string, int $debug) : string
  # getCode(string $target, array $bucket) : void
  # cut(string $string, string $sequence, ...) : string
}

note right of External::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    ?Placeholder $placeholder = null
    ?\JDatabaseDriver $db = null
    ?User $user = null
    ?CMSApplication $app = null
end note

note right of External::set
  Set the external code string & load it in to string

  since: 3.2.0
  return: string
end note

note right of External::getCode
  Get the External Code/String

  since: 3.2.0
  return: void
end note

note right of External::cut
  Cut the External Code/String

  since: 3.2.0
  return: string
  
  arguments:
    string $string
    string $sequence
    string $key
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

