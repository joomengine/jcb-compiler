```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Grep (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power**
> extends: **ExtendingGrep**
```uml
@startuml
class Grep << (F,LightGreen) >> #RoyalBlue {
  # remoteIndex(object $path) : void
  - searchLocal(string $guid) : ?object
  - searchRemote(string $guid) : ?object
  - getLocal(object $path, string $guid) : ?object
  - getRemote(object $path, string $guid) : ?object
  - loadRemoteFile(string $owner, string $repo, ...) : mixed
  - localIndex(object $path) : void
}

note right of Grep::remoteIndex
  Load the remote repository index of powers

  since: 3.2.0
  return: void
end note

note right of Grep::searchLocal
  Search for a local power

  since: 3.2.0
  return: ?object
end note

note right of Grep::searchRemote
  Search for a remote power

  since: 3.2.0
  return: ?object
end note

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

note right of Grep::loadRemoteFile
  Load the remote file

  since: 3.2.0
  return: mixed
  
  arguments:
    string $owner
    string $repo
    string $path
    ?string $branch
end note

note right of Grep::localIndex
  Load the local repository index of powers

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

