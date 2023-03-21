```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class File (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Utilities**
```uml
@startuml
class File  #Gold {
  # Counter $counter
  # Paths $paths
  + __construct(?Counter $counter = null, ?Paths $paths = null)
  + html(string $path = '', string $root = 'component') : void
  + write(string $path, string $data) : bool
}

note right of File::__construct
  Constructor

  since: 3.2.0
end note

note right of File::html
  set HTML blank file to a path

  return: void
end note

note right of File::write
  Create a file on the server if it does not exist, or Overwrite existing files

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

