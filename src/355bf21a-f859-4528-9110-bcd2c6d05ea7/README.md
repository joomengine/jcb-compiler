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
> extends: **ExtendingGrep**
```uml
@startuml
class Grep << (F,LightGreen) >> #RoyalBlue {
  # array $order
  # remoteIndex(object $path) : void
  # searchRemote(string $guid) : ?object
  # getRemote(object $path, string $guid) : ?object
  # loadRemoteFile(string $organisation, string $repository, ...) : mixed
}

note right of Grep::remoteIndex
  Load the remote repository index of powers

  since: 3.2.0
  return: void
end note

note right of Grep::searchRemote
  Search for a remote power

  since: 3.2.0
  return: ?object
end note

note right of Grep::getRemote
  Get a remote joomla power

  since: 3.2.0
  return: ?object
end note

note right of Grep::loadRemoteFile
  Load the remote file

  since: 3.2.0
  return: mixed
  
  arguments:
    string $organisation
    string $repository
    string $path
    ?string $branch
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

