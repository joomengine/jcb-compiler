```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface GuiInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Interfaces\Customcode**
> extends: ****
```uml
@startuml
interface GuiInterface  #Lavender {
  + set(string $string, array $config) : string
  + search(string $file, array $placeholders, ...) : void
}

note right of GuiInterface::set
  Set the JCB GUI code placeholder

  since: 3.2.0
  return: string
end note

note right of GuiInterface::search
  search a file for gui code blocks that were updated in the IDE

  since: 3.2.0
  return: void
  
  arguments:
    string $file
    array $placeholders
    string $today
    string $target
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

