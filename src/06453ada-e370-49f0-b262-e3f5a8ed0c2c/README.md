```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Placeholder (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler**
```uml
@startuml
class Placeholder  #Gold {
  + array $active
  # Config $config
  + __construct(?Config $config = null)
  + set(string $key, mixed $value, ...) : void
  + get(string $key) : mixed
  + exist(string $key) : bool
  + add(string $key, mixed $value, ...) : void
  + remove(string $key) : void
  + set_(string $key, mixed $value) : void
  + get_(string $key) : mixed
  + exist_(string $key) : bool
  + add_(string $key, mixed $value) : void
  + remove_(string $key) : void
  + set_h(string $key, mixed $value) : void
  + get_h(string $key) : mixed
  + exist_h(string $key) : bool
  + add_h(string $key, mixed $value) : void
  + remove_h(string $key) : void
  + setType(string $key, array $values) : void
  + clearType(string $key) : void
  + update(string $data, array $placeholder, ...) : string
  + update_(string $data) : string
  + keys(int $type, ?int $id = null) : array
}

note right of Placeholder::__construct
  Constructor.

  since: 3.2.0
end note

note left of Placeholder::set
  Set content

  since: 3.2.0
  return: void
  
  arguments:
    string $key
    mixed $value
    bool $hash = true
end note

note right of Placeholder::get
  Get content by key

  since: 3.2.0
  return: mixed
end note

note left of Placeholder::exist
  Does key exist at all in any variation

  since: 3.2.0
  return: bool
end note

note right of Placeholder::add
  Add content

  since: 3.2.0
  return: void
  
  arguments:
    string $key
    mixed $value
    bool $hash = true
end note

note left of Placeholder::remove
  Remove content

  since: 3.2.0
  return: void
end note

note right of Placeholder::set_
  Set content with [ [ [ ... ] ] ] hash

  since: 3.2.0
  return: void
end note

note left of Placeholder::get_
  Get content with [ [ [ ... ] ] ] hash

  since: 3.2.0
  return: mixed
end note

note right of Placeholder::exist_
  Does key exist with [ [ [ ... ] ] ] hash

  since: 3.2.0
  return: bool
end note

note left of Placeholder::add_
  Add content with [ [ [ ... ] ] ] hash

  since: 3.2.0
  return: void
end note

note right of Placeholder::remove_
  Remove content with [ [ [ ... ] ] ] hash

  since: 3.2.0
  return: void
end note

note left of Placeholder::set_h
  Set content with # # # hash

  since: 3.2.0
  return: void
end note

note right of Placeholder::get_h
  Get content with # # # hash

  since: 3.2.0
  return: mixed
end note

note left of Placeholder::exist_h
  Does key exist with # # # hash

  since: 3.2.0
  return: bool
end note

note right of Placeholder::add_h
  Add content with # # # hash

  since: 3.2.0
  return: void
end note

note left of Placeholder::remove_h
  Remove content with # # # hash

  since: 3.2.0
  return: void
end note

note right of Placeholder::setType
  Set a type of placeholder with set of values

  since: 3.2.0
  return: void
end note

note left of Placeholder::clearType
  Remove a type of placeholder by main key

  since: 3.2.0
  return: void
end note

note right of Placeholder::update
  Update the data with the placeholders
THE ACTION OPTIONS ARE
1 -> Just replace (default)
2 -> Check if data string has placeholders
3 -> Remove placeholders not in data string

  since: 3.2.0
  return: string
  
  arguments:
    string $data
    array $placeholder
    int $action = 1
end note

note left of Placeholder::update_
  Update the data with the active placeholders

  since: 3.2.0
  return: string
end note

note right of Placeholder::keys
  return the placeholders for inserted and replaced code

  since: 3.2.0
  return: array
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

