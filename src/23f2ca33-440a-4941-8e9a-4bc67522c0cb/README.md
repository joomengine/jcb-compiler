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
  # JoomlaPower $joomla
  + __construct(Power $power, JoomlaPower $joomla)
  + add(string $file, string $data, ...) : void
  - openFileWithLock(string $file) : resource
  - processFile(resource $actual_file, resource $temp_file, ...) : void
  - truncateIfNeeded(resource $actual_file, string $data, ...) : void
  - copyRemainingData(resource $actual_file, resource $temp_file, ...) : void
  - injectSuperPowers(resource $actual_file) : void
  - injectJoomlaPowers(resource $actual_file) : void
}

note right of FileInjector::__construct
  Constructor.

  since: 3.2.1
end note

note left of FileInjector::add
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

note left of FileInjector::processFile
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

note left of FileInjector::copyRemainingData
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

note left of FileInjector::injectJoomlaPowers
  Injects Joomla powers into the file content, if found, and updates the file.

  since: 3.2.1
  return: void
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---23f2ca33_440a_4941_8e9a_4bc67522c0cb---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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

