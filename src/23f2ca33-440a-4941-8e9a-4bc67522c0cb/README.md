```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class FileInjector (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Utilities**
```uml
@startuml
class FileInjector << (F,LightGreen) >> #RoyalBlue {
  # Power $power
  + __construct(Power $power)
  + add(string $file, string $data, ...) : void
  - openFileWithLock(string $file) : resource
  - processFile(resource $actual_file, resource $temp_file, ...) : void
  - truncateIfNeeded(resource $actual_file, string $data, ...) : void
  - copyRemainingData(resource $actual_file, resource $temp_file, ...) : void
  - injectSuperPowers(resource $actual_file) : void
}

note right of FileInjector::__construct
  Constructor.

  since: 3.2.0
end note

note right of FileInjector::add
  Inserts or replaces data in a file at a specific position.

  since: 3.2.0
  return: void
  
  arguments:
    string $file
    string $data
    int $position
    ?int $replace = null
end note

note right of FileInjector::openFileWithLock
  Opens a file and acquires an exclusive lock on it.

  since: 3.2.0
  return: resource
end note

note right of FileInjector::processFile
  Processes the file for data insertion and copying the remaining data.

  since: 3.2.0
  return: void
  
  arguments:
    resource $actual_file
    resource $temp_file
    string $data
    int $position
    ?int $replace
end note

note right of FileInjector::truncateIfNeeded
  Truncates the file after data insertion if necessary.

  since: 3.2.0
  return: void
  
  arguments:
    resource $actual_file
    string $data
    int $position
end note

note right of FileInjector::copyRemainingData
  Copies the remaining data from the temporary stream to the actual file.

  since: 3.2.0
  return: void
  
  arguments:
    resource $actual_file
    resource $temp_file
    int $position
    ?int $replace
end note

note right of FileInjector::injectSuperPowers
  Injects super powers into the file content, if found, and updates the file.

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

