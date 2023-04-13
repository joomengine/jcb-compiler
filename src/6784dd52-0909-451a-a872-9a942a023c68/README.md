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
```uml
@startuml
class Grep << (F,LightGreen) >> #Green {
  + string $path
  + ?array $paths
  # Contents $contents
  # CMSApplication $app
  + __construct(string $path, array $paths, ...)
  + get(string $guid, array $order = ['Local', 'Remote']) : ?object
  - searchLocal(string $guid) : ?object
  - searchRemote(string $guid) : ?object
  - getLocal(object $path, string $guid) : ?object
  - getRemote(object $path, string $guid) : ?object
  - init() : void
  - localIndex(object $path) : void
  - remoteIndex(object $path) : void
  - loadRemoteFile(string $owner, string $repo, ...) : mixed
  - getCode(string $code) : ?string
  - getLicense(string $code) : ?string
}

note right of Grep::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    string $path
    array $paths
    Contents $contents
    ?CMSApplication $app = null
end note

note left of Grep::get
  Get a power

  since: 3.2.0
  return: ?object
end note

note right of Grep::searchLocal
  Search for a local power

  since: 3.2.0
  return: ?object
end note

note left of Grep::searchRemote
  Search for a remote power

  since: 3.2.0
  return: ?object
end note

note right of Grep::getLocal
  Get a local power

  since: 3.2.0
  return: ?object
end note

note left of Grep::getRemote
  Get a remote power

  since: 3.2.0
  return: ?object
end note

note right of Grep::init
  Set path details

  since: 3.2.0
  return: void
end note

note left of Grep::localIndex
  Load the local repository index of powers

  since: 3.2.0
  return: void
end note

note right of Grep::remoteIndex
  Load the remote repository index of powers

  since: 3.2.0
  return: void
end note

note left of Grep::loadRemoteFile
  Load the remote file

  since: 3.2.0
  return: mixed
  
  arguments:
    string $owner
    string $repo
    string $path
    ?string $branch
end note

note right of Grep::getCode
  Get the class body

  return: ?string
end note

note left of Grep::getLicense
  Get the class license

  return: ?string
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

