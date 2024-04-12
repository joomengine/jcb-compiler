```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Grep (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power**
```uml
@startuml
class Grep  #Gold {
  + ?string $path
  + ?array $paths
  # Contents $contents
  # CMSApplication $app
  + __construct(string $path, array $paths, ...)
  + getRemotePowersGuid() : ?array
  + get(string $guid, array $order = ['local', 'remote']) : ?object
  - searchLocal(string $guid) : ?object
  - searchRemote(string $guid) : ?object
  - getLocal(object $path, string $guid) : ?object
  - getRemote(object $path, string $guid) : ?object
  - init() : void
  - localIndex(object $path) : void
  - remoteIndex(object $path) : void
  - loadRemoteFile(string $owner, string $repo, ...) : mixed
  - getFunctionName(string $name) : ?string
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

note left of Grep::getRemotePowersGuid
  Get all remote powers GUID's

  since: 3.2.0
  return: ?array
end note

note right of Grep::get
  Get a power

  since: 3.2.0
  return: ?object
end note

note left of Grep::searchLocal
  Search for a local power

  since: 3.2.0
  return: ?object
end note

note right of Grep::searchRemote
  Search for a remote power

  since: 3.2.0
  return: ?object
end note

note left of Grep::getLocal
  Get a local power

  since: 3.2.0
  return: ?object
end note

note right of Grep::getRemote
  Get a remote power

  since: 3.2.0
  return: ?object
end note

note left of Grep::init
  Set path details

  since: 3.2.0
  return: void
end note

note right of Grep::localIndex
  Load the local repository index of powers

  since: 3.2.0
  return: void
end note

note left of Grep::remoteIndex
  Load the remote repository index of powers

  since: 3.2.0
  return: void
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

note left of Grep::getFunctionName
  Get function name

  since: 3.2.0
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

