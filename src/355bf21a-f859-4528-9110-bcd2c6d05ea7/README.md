```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Grep (Details)
> namespace: **VDM\Joomla\Componentbuilder\JoomlaPower**
> extends: **Grep**
```uml
@startuml
class Grep << (F,LightGreen) >> #RoyalBlue {
  - getLocal(object $path, string $guid) : ?object
  - getRemote(object $path, string $guid) : ?object
  - localIndex(object $path) : void
  - remoteIndex(object $path) : void
}

note right of Grep::getLocal
  Get a local power

  since: 3.2.0
  return: ?object
end note

note right of Grep::getRemote
  Get a remote power

  since: 3.2.0
  return: ?object
end note

note right of Grep::localIndex
  Load the local repository index of powers

  since: 3.2.0
  return: void
end note

note right of Grep::remoteIndex
  Load the remote repository index of powers

  since: 3.2.0
  return: void
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

