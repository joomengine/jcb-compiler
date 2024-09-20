```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Dispenser (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Customcode**

```uml
@startuml
class Dispenser  #Gold {
  + array $hub
  # Placeholder $placeholder
  # Customcode $customcode
  # Gui $gui
  # Hash $hash
  # LockBase $base64
  + __construct(Placeholder $placeholder, Customcode $customcode, ...)
  + set(string $script, string $first, ...) : bool
  + get(string $first, string $second, ...) : mixed
  # initHub(string $first, ?string $second = null, ...) : void
  # setHub(string $script, string $first, ...) : void
}

note right of Dispenser::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Placeholder $placeholder
    Customcode $customcode
    Gui $gui
    Hash $hash
    LockBase $lockbase
end note

note right of Dispenser::set
  Set the script for the customcode dispenser
default: true
default: true
default: false

  since: 3.2.0
  return: bool
  
  arguments:
    string $script
    string $first
    ?string $second = null
    ?string $third = null
    array $config = []
    bool $base64 = true
    bool $dynamic = true
    bool $add = false
end note

note right of Dispenser::get
  Get the script from the customcode dispenser

  since: 3.2.0
  return: mixed
  
  arguments:
    string $first
    string $second
    string $prefix = ''
    ?string $note = null
    bool $unset = false
    mixed|null $default = null
    string $suffix = ''
end note

note right of Dispenser::initHub
  Make sure the hub arrays are all set
default: false

  since: 3.2.0
  return: void
  
  arguments:
    string $first
    ?string $second = null
    ?string $third = null
    bool $add = false
end note

note right of Dispenser::setHub
  Set a script in the hub
default: false

  since: 3.2.0
  return: void
  
  arguments:
    string $script
    string $first
    ?string $second = null
    ?string $third = null
    bool $add = false
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---f1dc6430_fb54_452e_aa53_ce32ae93db88---Power
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

