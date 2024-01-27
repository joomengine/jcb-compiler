```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Gui (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Customcode**
```uml
@startuml
class Gui  #Gold {
  # Config $config
  # Reverse $reverse
  # Parser $parser
  # $db
  # $app
  + __construct(?Config $config = null, ?Reverse $reverse = null, ...)
  + set(string $string, array $config) : string
  + search(string $file, array $placeholders, ...) : void
  # check(string $code) : bool
}

note right of Gui::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Reverse $reverse = null
    ?Parser $parser = null
end note

note right of Gui::set
  Set the JCB GUI code placeholder

  since: 3.2.0
  return: string
end note

note right of Gui::search
  search a file for gui code blocks that were updated in the IDE

  since: 3.2.0
  return: void
  
  arguments:
    string $file
    array $placeholders
    string $today
    string $target
end note

note right of Gui::check
  search a code to see if there is already any custom
code or other reasons not to add the GUI code placeholders

  since: 3.2.0
  return: bool
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

